<template>
	<!-- <div> -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
				<Header/>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				    <Sidebar/>
				    <h2>{{welcome}}</h2>
				    <router-view></router-view>
					
				</div>
				<Footer/>
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
        	welcome(){
        		return this.$store.getters.welcome
        	}
        },
        components: {
        	Header,
        	Sidebar,
        	Footer
        }
    }
</script>