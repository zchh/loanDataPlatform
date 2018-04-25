<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9
 * Time: 18:53
 */
namespace app\user\controller;

use app\common\model\UserToken;
use app\common\selfConfig\StatusCode;
use think\Controller;
use think\Request;
use think\Session;
use app\common\model\ClickLikeRecord;
use app\common\model\UserAttention;
use app\common\model\User;
use app\common\model\Grade;
use app\common\model\BookComment;
use app\common\model\HandDoComment;
use app\common\model\ProductionComment;
use app\common\model\ForumComment;
use app\common\model\DailyDesignComment;
use app\common\model\CgCinemaComment;
use app\common\model\Book;
use app\common\model\CgCinema;
use app\common\model\DailyDesign;
use app\common\model\MaterialLibrary;
use app\common\model\Production;
use app\common\model\HandDo;
use app\common\model\UserProductionCollect;


class Base extends Controller
{

    //json封装
     protected function selfResponse($code, $message, $data=null, $pageInfo=null)
     {
         $response['code'] = $code;
         $response['msg'] = $message;
         if($data == null && $code == StatusCode::GET_SUCCESS){
             $response['data'] = [];
         }
         if($data != null){
             $response['data'] = $data;
         }
         if($pageInfo != null){
             $response['pageInfo'] = $pageInfo;
         }
         return json_encode($response);
     }

    /**
     * 分页信息封装
     * @param $total          //查询结果总条数
     * @param $pageSize       //每页条数
     * @param $currentPage    //当前页数
     * @return array
     */
    protected function pageInfoConfig($total, $pageSize, $currentPage)
    {
        return  [
          'total' => (int)$total,
          'pageSize' => (int)$pageSize,
          'currentPage' => (int)$currentPage
        ];
    }

    //失败的反馈
    protected function selfFailResponse()
    {
        return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::SERVER_ERRO_MESSAGE);
    }

    //时间戳到时间转化
    protected function timeToDate($time)
    {
        return  date('Y-m-d H:i:s', $time);
    }

    //校验登录
    protected function checkUserLogin()
    {
        $header = Request::instance()->header();
        if(empty($header['userid']) || empty($header['token'])){
            return false;
        }
        $userToken = UserToken::getUserTokenByUserId($header['userid']);
        if(empty($userToken)){
            return false;
        }
        if($header['token'] != $userToken['token'] || $userToken['lose_time']<=time()){
            return false;
        }
        return $header['userid'];
    }

    //时间到几天前（超过三天）
    protected  function timeToDay($time)
    {
        $rtime = date("m-d H:i",$time);
        $rtime2 = date("Y-m-d H:i",$time);
        $time = time() - $time;
        if ($time < 60) {
            $str = '刚刚';
        }
        elseif ($time < 60 * 60) {
            $min = floor($time/60);
            $str = $min.' 分钟前';
        }
        elseif ($time < 60 * 60 * 24) {
            $h = floor($time/(60*60));
            $str = $h.'小时前 ';
        }
        elseif ($time < 60 * 60 * 24 * 3) {
            $d = floor($time/(60*60*24));
            if($d==1)
                $str = '昨天';
            else
                $str = '前天';
        }
        elseif ($time < 60 * 60 * 24 * 7) {
            $d = floor($time/(60*60*24));
            $str = $d.' 天前';
        } elseif ($time < 60 * 60 * 24 * 30) {
            $str = $rtime;
        }
        else {
            $str = $rtime2;
        }
        return $str;
    }

    //产生一定个数的不重复随机数
    protected function getRandNumberArr($begin,$end,$limit){
        $rand_array=range($begin,$end);
        shuffle($rand_array);//调用现成的数组随机排列函数
        return array_slice($rand_array,0,$limit);//截取前$limit个
    }

    //判断是否已点赞
    protected function getIsLike($type, $clickUserId, $objectId)
    {
        $param['like_record_type'] = $type;
        $param['click_user_id'] = $clickUserId;
        $param['object_id'] = $objectId;
        $productions = ClickLikeRecord::selectClickLikeRecord($param);
        $isLike = (empty($productions)) ? StatusCode::NOT_LIKE : StatusCode::HAVE_LIKED;
        return $isLike;
    }

    //判断是否已关注
    protected function getIsAttention($userId, $beUserId)
    {
        $param['attention_user_id'] = $userId;
        $param['attention_be_user_id'] = $beUserId;
        $userAttention = UserAttention::selectUserAttention($param);
        $isAttention = (empty($userAttention['data'])) ? StatusCode::NOT_ATTENTION : StatusCode::HAVE_ATTENTION;
        return $isAttention;
    }

    //判断用户是否被禁言
    protected function getIsShutUp($userId)
    {
        $user = User::getUserByUserId($userId);
        return $user['is_shutup'];
    }

    //获取用户评分
    protected function getUserGrade($type, $objectId, $userId)
    {
        $param['type'] = $type;
        $param['object_id'] = $objectId;
        $param['user_id'] = $userId;
        $result = Grade::selectGrade($param);
        $grade = 0;
        foreach ($result as $single){
            $grade += $single['grade'];
        }
        return $grade;
    }

    //获取总体分数
    protected function getGrade($type, $objectId)
    {
        $param['type'] = $type;
        $param['object_id'] = $objectId;
        $result = Grade::selectGrade($param);
        $grade = 0;
        foreach ($result as $single){
            $grade += $single['grade'];
        }
        $data['grade'] = 0;
        $data['count'] = count($result);
        if($data['count'] != 0){
            $data['grade'] = number_format($grade/$data['count'], 0 );
        }
        return $data;
    }

    //评论量叠加
    protected function addCommentReplyNum($commentType, $commentId)
    {
        switch ($commentType){
            case StatusCode::BOOK_COMMENT_REPLY:
                $comment = BookComment::getBookCommentByCommentId($commentId);
                if(empty($comment)){
                    return false;
                }
                $updateArr['book_comment_reply_num'] = $comment['book_comment_num'] + 1;
                BookComment::updateBookComment($commentId, $updateArr);
                return true;
                break;
            case StatusCode::CG_CINEMA_COMMENT_REPLY:
                $comment = CgCinemaComment::getCgCinemaCommentByCommentId($commentId);
                if(empty($comment)){
                    return false;
                }
                $updateArr['comment_reply_num'] = $comment['comment_reply_num'] + 1;
                CgCinemaComment::updateCgCinemaComment($commentId, $updateArr);
                return true;
                break;
            case StatusCode::DAILY_DESIGN_COMMENT_REPLY:
                $comment = DailyDesignComment::getDailyDesignCommentById($commentId);
                if(empty($comment)){
                    return false;
                }
                $updateArr['comment_reply_num'] = $comment['comment_reply_num'] + 1;
                DailyDesignComment::updateDailyDesignComment($commentId, $updateArr);
                return true;
                break;
            case StatusCode::HAND_DO_COMMENT_REPLY:
                $comment = HandDoComment::getHandDoCommentById($commentId);
                if(empty($comment)){
                    return false;
                }
                $updateArr['comment_reply_num'] = $comment['comment_reply_num'] + 1;
                HandDoComment::updateHandDoComment($commentId, $updateArr);
                return true;
                break;
            case StatusCode::PRODUCTION_COMMENT_REPLY:
                $comment = ProductionComment::getProductionCommentByProductionCommentId($commentId);
                if(empty($comment)){
                    return false;
                }
                $updateArr['production_comment_reply_num'] = $comment['production_comment_reply_num'] + 1;
                ProductionComment::updateProductionComment($commentId, $updateArr);
                return true;
                break;
            default:
                return false;
        }
    }

    //浏览量叠加
    pubLic function addPageView($type, $id)
    {
        //浏览量添加
        switch ($type){
            case StatusCode::ADD_BOOK_PAGE_VIEW:
                $entity = Book::getBookByBookId($id);
                if(empty($entity)){
                    return false;
                }
                $updateArr['book_page_view'] = $entity['book_page_view'] +1;
                Book::updateBook($id, $updateArr);
                return true;
                break;
            case StatusCode::ADD_DAILY_DESIGN_PAGE_VIEW:
                $entity = DailyDesign::getDailyDesignById($id);
                if(empty($entity)){
                    return false;
                }
                $updateArr['design_page_view'] = $entity['design_page_view'] + 1;
                DailyDesign::updateDailyDesign($id, $updateArr);
                return true;
                break;
            case StatusCode::ADD_HAND_DO_PAGE_VIEW:
                $entity = HandDo::getHandDoById($id);
                if(empty($entity)){
                    return false;
                }
                $updateArr['page_view'] = $entity['page_view'] + 1;
                HandDo::updateHandDo($id, $updateArr);
                return true;
                break;
            case StatusCode::ADD_MATERIAL_PAGE_VIEW:
                $entity = MaterialLibrary::getMaterialLibraryById($id);
                if(empty($entity)){
                    return false;
                }
                $updateArr['page_view'] = $entity['page_view'] + 1;
                MaterialLibrary::updateMaterialLibrary($id, $updateArr);
                break;
            case StatusCode::ADD_PRODUCTION_PAGE_VIEW:
        }
    }

    public function getProductionIsCollect($productionId, $userId)
    {
        $param['collect_production_id'] = $productionId;
        $param['collect_user_id'] = $userId;
        $result = UserProductionCollect::selectProductionCollect($param);
        if(empty($result)){
            return true;
        }
        return false;
    }



}