export function initialize(store, router) {
	router.beforeEach((to, from, next) => {

		const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
		const currentUser = store.state.currentUser;

		const isFrontend = to.matched.some(record => record.meta.type);

		if (isFrontend) {
		
		}else{
			if (requiresAuth && !currentUser) {
				next('/admin/login');
			}else if ((to.path == '/admin/login' || to.path == '/') && currentUser) {
				next('/admin/home');
			}else{
				next();
			}
		}
		
	});

	axios.interceptors.response.use(null, (error) => {
		if (error.response.status == 401) {
			store.commit('logout');
			router.push('/admin/login');
		}
		return Promise.reject(error);
	});

	axios.defaults.headers.common["Authorization"] = 'Bearer'+ store.getters.currentUser.token
}