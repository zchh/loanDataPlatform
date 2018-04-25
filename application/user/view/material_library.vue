<template>
    <div class="material_library clearfix">
      <el-menu  
        default-active="2"

            class="material-menu-vertical fl "
            background-color="#333"
            text-color="#adadad"
            active-text-color="#018dcd"
            @open="handleOpen"
            @close="handleClose"
            @select="hangClick">  

       <NavMenu :navMenus="leftMenus.childs"></NavMenu>  
     </el-menu>  


     <div class="fr">
        <MaterialRightHeader/>
        <h2 class="material_library_tui">推荐</h2>
        <MaterialContent />
     </div>
    </div>
</template>


<script>
import NavMenu from "../components/tree_menu.vue";
import MaterialRightHeader from "../components/material_right_header.vue";
import MaterialContent from "../components/material_content.vue";
export default {
  components: {
    NavMenu,
    MaterialRightHeader,
    MaterialContent
  },
  data() {
    return {
      leftMenus: {
        //  "entity": null,
        childs: [
          {
            entity: {
              id: 6,
              name: "userManage",
              alias: "用户管理",
              sort: 1,
              value: null,
              createUserId: 1
            },
            childs: [
              {
                entity: {
                  id: 7,
                  name: "accountManage",
                  alias: "帐号管理",
                  sort: 0,
                  value: "",
                  createUserId: 1
                },
                childs: [
                  {
                    entity: {
                      id: 14,
                      name: "emailManage",
                      alias: "邮箱管理",
                      sort: 0,
                      value: "/content/email",
                      createUserId: 1
                    },
                    childs: null
                  },
                  {
                    entity: {
                      id: 13,
                      name: "passManage",
                      alias: "密码管理",
                      sort: 1,
                      value: "/content/pass",
                      createUserId: 1
                    },
                    childs: null
                  }
                ]
              },
              {
                entity: {
                  id: 8,
                  name: "integralManage",
                  alias: "积分管理",
                  sort: 1,
                  value: "/user/integral",
                  createUserId: 1
                },
                childs: null
              }
            ]
          },
        ]
      }
    };
  },
  mounted() {
    this.get_material(); //获取  材质库  数据
  },
  methods: {
    handleOpen(key, keyPath) {
      console.log(key, keyPath);
    },
    handleClose(key, keyPath) {
      console.log(key, keyPath);
    },
    hangClick(key, keyPath) {
      console.log(key, keyPath);
    },
    get_material() {
      this.$store
        .dispatch("get_material")
        .then(data => {
          console.log(data.data);




        })
        .catch(e => {
          console.log(e);
        });
    }
  }
};
</script>


<style scoped>
@media screen and (min-width: 1600px) {
  .material_library {
    width: 1570px;
    /* height: 2000px; */
    margin: 70px auto;
  }
  .material-menu-vertical {
    width: 260px;
    min-height: 600px;
  }
  menu_item {
    background: #333 !important;
  }
  .material_library_tui {
    line-height: 130px;
    color: #fff;
  }
}
</style>


