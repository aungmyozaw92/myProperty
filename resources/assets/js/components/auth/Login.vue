<template>
   <!-- <div class="m-grid m-grid--hor m-grid--root m-page login-main" > -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1 login-main" id="m_login " v-bind:style="{ backgroundImage: 'url(admin/assets/app/media/img/bg/bg-1.jpg)' }" >
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="#">
                                <img  v-bind:src="'/admin/assets/app/media/img/logos/logo-1.png'"/>
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Sign In To Admin
                                </h3>
                            </div>
                            <form class="m-login__form m-form" method="POST" action="">
                                <div class="form-group m-form__group">
                                   <input id="username" type="text" class=" m-input form-control" name="username"required autofocus>
                                </div>
                                <div class="form-group m-form__group">

                                     <input id="password" type="password" class="form-control m-input m-login__form-input--last " name="password" required>
                                </div>
                                <!-- <div class="row m-login__form-sub">
                                    <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--light">
                                            <input type="checkbox" name="remember">
                                            Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right m-login__form-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                            Forget Password ?
                                        </a>
                                    </div>
                                </div> -->
                                <div class="m-login__form-action">
                                    <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
                                Login
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
</template>

<script>
import {login} from '../../helpers/auth';
    export default {
        name: "login",
       data() {
        return{
            form: {
                email: '',
                password: ''
            },
            error: null
        };
       },
       methods: {
        authenticate(){
            this.$store.dispatch('login');

            login(this.$data.form)
            .then((res)=>{
                this.$store.commit("loginSuccess",res);
                this.$router.push({path: '/admin/home'});
            }).catch((error)=> {
                this.$store.commit("logininFailed",{error});
            });
        }
       }
    }
</script>

<style>
    #m_login{
        padding-top: -70px important!;
    }
    .m-header--fixed .m-body {
        padding-top: -70px important!;
    }
</style>