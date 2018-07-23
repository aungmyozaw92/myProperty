import Dashboard from './components/admin/Dashboard.vue';
import UsersIndex from './components/admin/users/UsersIndex.vue';

export const routes = [
	{
		path: '/admin/home',
		component: Dashboard
	},
	{
		path: '/admin/users',
		component: UsersIndex
	}
]