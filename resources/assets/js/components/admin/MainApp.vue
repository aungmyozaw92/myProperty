<template>
	<!-- <div> -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
            <span v-if="loginUser">
				<Header/>
            </span>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">   
                    <span v-if="loginUser">
                         <Sidebar/>
                    </span>
				    <router-view></router-view>
				</div>
                <span v-if="loginUser">
				    <Footer/>
                </span>
			</div>
	<!-- </div> -->
</template>

<script>
    import Header from './Header.vue';
    import Sidebar from './Sidebar.vue';
    import Footer from './Footer.vue';
    export default {
        name: 'main-app',
        computed: {
        	loginUser(){
        		return this.$store.getters.currentUser
        	}
        },
        components: {
        	Header,
        	Sidebar,
        	Footer
        }
    }
</script>