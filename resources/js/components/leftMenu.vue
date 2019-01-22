<template>
  <div class="left-menu">
    <div class="menu-container flex-column">
      <div class="system">
        <span>MixPassport</span>
      </div>
      <div class="menu-main flex-1 flex-column">

        <div class="main-body">
          <el-menu 
            ref="leftmenu"
            background-color="#324157" 
            text-color="#999999" 
            active-text-color="#fff" 
            :default-active="menuActiveIndex" 
           >
            <!--             
            <el-submenu index="1" :class="{active: activeIndex == '1'}">
              <template slot="title">
                <i class="user-icon"></i>
                <span>用户</span>
              </template>

              <el-menu-item-group>
                <el-menu-item index="1-1">选项1</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>
                <el-menu-item index="1-2">选项2</el-menu-item>

              </el-menu-item-group>
            </el-submenu> -->



            <el-menu-item index="/user" @click="goto('user')">
              <i class="icon-user"></i>
              <span slot="title">用户</span>
            </el-menu-item>

            <el-menu-item index="/customer" @click="goto('customer')">
              <i class="icon-user"></i>
              <span slot="title">客户</span>
            </el-menu-item>


            <el-menu-item index="/usergroup" @click="goto('usergroup')">
              <i class="icon-usergroup"></i>
              <span slot="title">用户组</span>
            </el-menu-item>

            <el-menu-item index="/application" @click="goto('application')">
              <i class="icon-application"></i>
              <span slot="title">应用</span>
            </el-menu-item>

          </el-menu>
        </div>

      </div>
    </div>
  </div>
</template>


<script>
  export default {

    data: function () {
      return {
        activeIndex: 1,
      }
    },

    mounted: function(){
      // console.log(this.$route);
      // console.log(this.$route.path.substring(0,6));
      // console.log(this.$refs.leftmenu.$data);

      

      if(this.$route.path.substring(0,6) == "/user/"){
        this.$refs.leftmenu.$data.activeIndex = "/user";
      }

      if(this.$route.path.substring(0,9) == "/customer"){
        this.$refs.leftmenu.$data.activeIndex = "/customer";
      }

      if(this.$route.path.substring(0,10) == "/usergroup"){
        this.$refs.leftmenu.$data.activeIndex = "/usergroup";
      }
     
      if(this.$route.path.substring(0,12) == "/application"){
        this.$refs.leftmenu.$data.activeIndex = "/application";
      }
    },

    methods: {
      goto(name) {
        console.log(this.$route);
        if(name == "user"){
          // 避免  点击左侧 导航栏时  总是用输入框中已有的数据  去查询内容
          if(this.$route.path == "/user/home") {
            window.location.reload();
            return ;
          }
          this.$router.push({path: "/user"});
          return ;
        }

        if(name == "customer"){
          // 避免  点击左侧 导航栏时  总是用输入框中已有的数据  去查询内容
          if(this.$route.path == "/customer/home") {
            window.location.reload();
            return ;
          }
          this.$router.push({path: "/customer"});
          return ;
        }


        if(name == "usergroup"){
          if(this.$route.path == "/usergroup/home") {
            window.location.reload();
            return ;
          }
          this.$router.push({path: "/usergroup"});
          return ;

        } 

        if(name == "application"){
          if(this.$route.path == "/application/home") {
            window.location.reload();
            return ;
          }
          this.$router.push({path: "/application"});
          return ;
        }
      }
    },

    computed: {
      menuActiveIndex: function(){
        if(this.$route.path == "/" || this.$route.path == "/user"){
          return "/user";
        }
        if(this.$route.path == "/usergroup"){
          return "/usergroup";
        }
        if(this.$route.path == "/application"){
          return "/application";
        }

        return "/"
      }
    },
  }

</script>

<style lang="scss" scoped>
  @import "../../sass/components/leftMenu.scss";

</style>
