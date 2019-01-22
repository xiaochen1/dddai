<template>
    <div class="index-container flex-wrap">
        <h1>index.vue啊</h1>
        <!-- <div class="left-navbar">
            <leftMenu></leftMenu>
        </div>
        <div class="content flexauto flex-column">
            <topHeader  ></topHeader>
            <div class="index-main flexauto flex-column">
                <router-view></router-view>
            </div>
        </div> -->
    </div>
</template>



<script>
import leftMenu from "../components/leftMenu"
import topHeader from "../components/topHeader"
export default {
    components: {leftMenu, topHeader},
}
</script>


<style lang="scss" scoped>
@import "../../sass/variables.scss";
    .index-container {
        width: 100%;
        height: 100%;
        background-color: $global_bgColor;
        .left-navbar {
            height: 100%;
            // background-color: #324157;
            box-sizing: border-box;
        }

        .content {
            overflow: auto;
            
        }
    }
</style>


