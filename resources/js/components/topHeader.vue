<template>
  <div class="top-header">
    <div class="top-container">
      <div class="top-main">
        <div class="top-content">
          <div class="top-box fl">
            <div class="home" @click="goHome">
              <span class="icon-home"></span>
            </div>
          </div>

          <div class="tool-box fr">
            <div class="user-box clearfix">
              <div class="info user-avatar">
                <span class=" avatar icon-userAvatar"></span>
              </div>
              <div class="info username">
                <span>{{accountInfoObj.username}}</span>
                <span class="tog icon-toggle"></span>
              </div>

              <div class="relative">
                <div class="rel-box">
                  <div class="item">
                    <div class="account-info" @click="toShowAccountInfoView">
                      <span class="rel-icon icon-account"></span>
                      <span>账户信息</span>
                    </div>
                  </div>
                  <div class="item">
                    <div class="version-info" @click="toShowVersionInfoView">
                      <span class="rel-icon icon-version"></span>
                      <span>版本信息</span>
                    </div>
                  </div>

                  <div class="item">
                    <div class="psw-info" @click="toShowModifyPswView">
                      <span class="rel-icon icon-version"></span>
                      <span>修改密码</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- 账户信息 -->
    <el-dialog :visible.sync="isShowAccuntInfoView" width="50%">
      <div class="dialog-top" slot="title">账户信息</div>
      <div class="account-main">
        <div class="main-body">
          <div class="body-head clearfix">
            <div class="account-avatar">
              <span class="icon-user-avatar-lg"></span>
            </div>
            <div class="base-info">
              <div class="info-item">
                <div class="item">
                  <div class="label">登录账号：</div>
                  <div class="value">{{editAccountInfoObj.username}}</div>
                </div>
                <div class="item">
                  <div class="label">手机号码：</div>
                  <div class="value">{{editAccountInfoObj.mobile}}</div>
                </div>
              </div>

              <div class="info-item">
                <div class="item">
                  <div class="label">登录角色：</div>
                  <div class="value" v-if="editAccountInfoObj.is_super == 1 || editAccountInfoObj.is_super == '1'">超级管理员</div>
                  <div class="value" v-else>普通用户</div>
                </div>
                <div class="item">
                  <div class="label">邮箱：</div>
                  <div class="value">{{editAccountInfoObj.email}}</div>
                </div>
              </div>

              <div class="info-item">
                <div class="item">
                  <div class="label">注册时间：</div>
                  <div class="value">{{editAccountInfoObj.created}}</div>
                </div>
              </div>
            </div>
          </div>

          <div class="split"></div>
          <div class="body-box">

            <div class="info-item">
              <div class="item">
                <div class="label">地址</div>
                <div class="value">
                  <el-input v-model="editAccountInfoObj.address" placeholder="请输入用户地址"></el-input>
                </div>
              </div>


            </div>


            <div class="info-item">
              <div class="item">
                <div class="label">描述</div>
                <div class="value">
                  <el-input v-model="editAccountInfoObj.description" type="textarea" placeholder="请输入描述内容" :autosize="{ minRows: 4, maxRows: 8}"></el-input>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <div slot="footer" class="dialog-footer">
        <div class="operate">
          <el-button type="success" @click="handleClickSaveAccount">保存</el-button>
          <el-button type="danger"  @click="handleClickCancelAccount">取消</el-button>
        </div>
      </div>
    </el-dialog>

    <!-- 版本信息     -->
    <el-dialog :visible.sync="isShowVersionInfoView" width="50%">
      <div class="dialog-top" slot="title">版本信息</div>
      <div class="version-box">
        <div class="version-item">
          <div class="current-version">
            当前版本信息： <span class="version">{{versionInfoObj.app}}</span>
          </div>
        </div>

        <div class="split"></div>

        <div class="warning-box">
          <div class="box-item">
            <div class="rel-icon">
              <span class="icon-warning"></span>
            </div>
            <div class="text protect">
              本计算机程序受版权法及国际公约的保护， 未经授权擅自赋值或者散布本程序的部分或者全部，将承受严厉的民事和刑事处罚， 对已知的违反者将给予法律范围内的全面制裁
            </div>
          </div>
          <div class="box-item">
            <div class="rel-icon">
              <span class="icon-copyright"></span>
            </div>
            <div class="text copyright">
              CopyRight 2018-2021 深圳市智物联网络有限公司
            </div>
          </div>
        </div>

      </div>
    </el-dialog>

    <!-- 密码修改 -->
    <el-dialog :visible.sync="isShowModifyPswView" width="50%">
      <div class="dialog-top" slot="title">密码修改</div>
      <div class="account-main">
        <div class="main-body">
          <div class="body-head clearfix">
            <div class="account-avatar">
              <span class="icon-user-avatar-lg"></span>
            </div>
            <div class="base-info">
              <div class="info-item">
                <div class="item">
                  <div class="label">登录账号：</div>
                  <div class="value">{{accountInfoObj.username}}</div>
                </div>
                <div class="item">
                  <div class="label">手机号码：</div>
                  <div class="value">{{accountInfoObj.mobile}}</div>
                </div>
              </div>

              <div class="info-item">
                <div class="item">
                  <div class="label">登录角色：</div>
                  <div class="value">{{accountInfoObj.is_super}}</div>
                </div>
                <div class="item">
                  <div class="label">邮箱：</div>
                  <div class="value">{{accountInfoObj.email}}</div>
                </div>
              </div>

              <div class="info-item">
                <div class="item">
                  <div class="label">注册时间：</div>
                  <div class="value">{{accountInfoObj.created}}</div>
                </div>
              </div>
            </div>
          </div>

          <div class="split"></div>
          <div class="body-box">

            <div class="info-item">
              <div class="item">
                <div class="label">原密码</div>
                <div class="value">
                  <el-input v-model="editPswObj.oldPsw"  placeholder="请输入用户地址"></el-input>
                </div>
              </div>

            </div>


            <div class="info-item">
              <div class="item">
                <div class="label">新密码</div>
                <div class="value">
                  <el-input v-model="editPswObj.newPsw"  type="password" placeholder="请输入新密码" ></el-input>
                </div>
              </div>

            </div>

            <div class="info-item">
              <div class="item">
                <div class="label">确认新密码</div>
                <div class="value">
                  <el-input type="password" v-model="editPswObj.renewPsw" placeholder="请重复输入新密码" ></el-input>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div slot="footer" class="dialog-footer">
        <div class="operate">
          <el-button type="success" @click="handleClickConfirmSavePsw">保存</el-button>
          <el-button type="danger" @click="handleClickConfirmCancelPsw">取消</el-button>
        </div>
      </div>
    </el-dialog>

  </div>
</template>


<script>
export default {
  data: function() {
    return {
      isShowAccuntInfoView: false,
      isShowVersionInfoView: false,
      isShowModifyPswView: false,
      editPswObj: {
        oldPsw: "",
        newPsw: "",
        renewPsw: ""
      },

      versionInfoObj: {},
      accountInfoObj: {
        user_id: "",
        username: ""
      },
      editAccountInfoObj: {
        user_id: ""
      }
    };
  },

  mounted: function() {
    var self = this;

    this.$http
      .get("/user")
      .then(function(res) {
        var result = res.data;
        if (result.code == 200) {
          self.accountInfoObj = result.result;

          return ;
        }

        self.$message({type: "error",message: result.msg});
      })
      .catch(function(err) {
        self.$message({ type: "error", message: err.msg });
      });
  },

  methods: {
    goHome() {
      console.log(this.$route);
      window.location.href = "/";
      // this.$router.push({
      //   path: "/"
      // });
    },
    toShowAccountInfoView() {
      this.isShowAccuntInfoView = true;
      var self = this;

      this.$http
        .get("/user")
        .then(function(res) {
          var result = res.data;
          if (result.code == 200) {
            self.editAccountInfoObj = result.result;


            return;
          }

          self.$message({type: "error",message: result.msg});
        })
        .catch(function(err) {
          self.$message({ type: "error", message: err.msg });
        });
    },
    toShowVersionInfoView() {
      this.isShowVersionInfoView = true;
      self = this;
      this.$http
        .get("/version")
        .then(function(res) {
          console.log(res);
          var result = res.data;
          if (result.code == 200) {
            self.versionInfoObj = result.result;


            return ;
          }

          self.$message({type: "error",message: result.msg});
        })
        .catch(function(err) {
          self.$message({ type: "error", message: err.msg });
        });
    },

    toShowModifyPswView() {
      this.isShowModifyPswView = true;
    },

    handleClickConfirmSavePsw() {
      if (this.editPswObj.newPsw != this.editPswObj.renewPsw) {
        this.$message({
          type: "error",
          message: "两次密码不一致，请确认新密码"
        });
        return;
      }
      this.isShowModifyPswView = false;
      var self = this;
      this.$http
        .post("/reset_password", {
          old_password: this.editPswObj.oldPsw,
          new_password: this.editPswObj.newPsw
        })
        .then(function(res) {
          var result = res.data;
          if (result.code == 200) {
            self.$message({ type: "success", message: result.msg });
            return;
          }

          self.$message({ type: "error", message: result.msg });
        })
        .catch(function(err) {
          self.$message({ type: "error", message: err.msg });
        });
    },

    handleClickConfirmCancelPsw() {
      this.isShowModifyPswView = false;
    },

    handleClickSaveAccount() {
      var self = this;
      // var tempSheet = JSON.parse(JSON.stringify(this.editAccountInfoObj));
      var tempSheet = {};
      tempSheet.user_id = this.editAccountInfoObj.user_id;
      tempSheet.mobile = this.editAccountInfoObj.mobile;
      tempSheet.username = this.editAccountInfoObj.username;
      tempSheet.description = this.editAccountInfoObj.description;
      tempSheet.address = this.editAccountInfoObj.address;

      this.$http
        .post("/admin/user/edit", tempSheet)
        .then(function(res) {
          var result = res.data;
          if (result.code == 200) {
            self.isShowAccuntInfoView = false;
            self.$message({ type: "success", message: result.msg });
            self.$router.go(0);
            return ;
          }

          self.$message({type: "error",message: result.msg});
        })
        .catch(function(err) {
          self.$message({ type: "error", message: err.msg });
        });
    },

    handleClickCancelAccount() {
      this.isShowAccuntInfoView = false;
    }
  }
};
</script>

<style lang="scss" scoped>
@import "../../sass/components/topHeader.scss";
@import "../../sass/icon.scss";
</style>