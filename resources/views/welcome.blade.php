<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/vuesax/dist/vuesax.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div>
            <vs-navbar class="nabarx">
              <vs-button vs-type="flat" vs-radius="50%" vs-icon="menu"></vs-button>

              <vs-navbar-title>
                Hello world
              </vs-navbar-title>

              <vs-spacer></vs-spacer>

              <vs-navbar-item index="0">
                <a href="#">Home</a>
              </vs-navbar-item>
              <vs-navbar-item index="1">
                <a href="#">News</a>
              </vs-navbar-item>
              <vs-navbar-item index="2">
                <a href="#">Update</a>
              </vs-navbar-item>
            </vs-navbar>
          </div>

          <div id="parentx">

                <vs-button @click="active=!active" vs-color="primary" vs-type="filled">Open Sidebar</vs-button>
                <vs-sidebar parent="body" default-index="1"  color="primary" class="sidebarx" spacer v-model="active">

                  <div class="header-sidebar" slot="header">
                    <vs-avatar  size="70px" src="https://randomuser.me/api/portraits/men/85.jpg"/>

                    <h4>
                      My Name
                      <vs-button vs-color="primary" vs-icon="more_horiz" vs-type="flat"></vs-button>
                    </h4>

                  </div>

                  <vs-sidebar-item index="1" icon="question_answer">
                    Dashboard
                  </vs-sidebar-item>

                  <vs-sidebar-item index="2" icon="gavel">
                    History
                  </vs-sidebar-item>

                  <vs-divider icon="person" position="left">
                    User
                  </vs-divider>

                  <vs-sidebar-item index="3" icon="verified_user">
                    Configurations
                  </vs-sidebar-item>
                  <vs-sidebar-item index="4" icon="account_box">
                    Perfile
                  </vs-sidebar-item>
                  <vs-sidebar-item index="5" >
                    Card
                  </vs-sidebar-item>

                  <div class="footer-sidebar" slot="footer">
                    <vs-button vs-icon="reply" vs-color="danger" vs-type="flat">log out</vs-button>
                    <vs-button vs-icon="settings" vs-color="primary" vs-type="border"></vs-button>
                  </div>

                </vs-sidebar>
              </div>


         <vs-row vs-justify="center">
          <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="6">
            <vs-card>
              <div slot="header">
                <h3>
                  Hello world !
                </h3>
              </div>
              <div>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </div>
              <div slot="footer">
                <vs-row vs-justify="flex-end">
                  <vs-button vs-type="gradient" vs-color="danger" vs-icon="favorite"></vs-button>
                  <vs-button vs-color="primary" vs-icon="turned_in_not"></vs-button>
                  <vs-button vs-color="rgb(230,230,230)" vs-color-text="rgb(50,50,50)" vs-icon="settings"></vs-button>
                </vs-row>
              </div>
            </vs-card>
          </vs-col>
        </vs-row>
    </div>
      <script src="https://unpkg.com/vue/dist/vue.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vuesax/dist/vuesax.umd.js"></script>
      <script>
          new Vue({
          el: '#app',
            
          )}

      </script>
      <style lang="stylus">
        .cardx margin 15px
        header-sidebar
  display flex
  align-items center
  justify-content center
  flex-direction column
  width 100%
  h4
    display flex
    align-items center
    justify-content center
    width 100%
    > button
      margin-left 10px
.footer-sidebar
  display flex
  align-items center
  justify-content space-between
  width 100%
  > button
      border 0px solid rgba(0,0,0,0) !important
      border-left 1px solid rgba(0,0,0,.07) !important
      border-radius 0px !important
</style>

</body>

</html>
