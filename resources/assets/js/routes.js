import Login from './components/auth/Login.vue';
import Dashboard from './components/admin/Dashboard.vue';
import UsersIndex from './components/admin/users/UsersIndex.vue';
import UsersAdd from './components/admin/users/UsersAdd.vue';
import UsersEdit from './components/admin/users/UsersEdit.vue';
import PurposeList from './components/admin/purposes/List.vue';
import PurposeAdd from './components/admin/purposes/Add.vue';
import PurposeEdit from './components/admin/purposes/Edit.vue';
import PropertyTypeList from './components/admin/property_types/List.vue';
import PropertyTypeAdd from './components/admin/property_types/Add.vue';
import PropertyTypeEdit from './components/admin/property_types/Edit.vue';
import DistanceList from './components/admin/distances/List.vue';
import DistanceAdd from './components/admin/distances/Add.vue';
import DistanceEdit from './components/admin/distances/Edit.vue';

export const routes = [
{
		name: 'dashboard',
		path: '/',
		component: Dashboard,
		meta: {
			requiresAuth: true
		}
	},
	{
		name: 'AdminHome',
		path: '/admin/home',
		component: Dashboard,
		meta: {
			requiresAuth: true
		}
	},
	{
		name: 'login',
		path: '/login',
		component: Login
	},

//User Routes
	{
		name: 'Users.Index',
		path: '/admin/users',
		component: UsersIndex,
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/users/create',
		name:'Users.Add',
		component: UsersAdd,
	},
	{
		path:'/admin/users/:id/edit',
		name:'Users.Edit',
		component: UsersEdit,
		props: (route) => ({propUserId: route.params.id}),
	},
//Purpose Route
	{
		name: 'Purpose.Index',
		path: '/admin/purposes',
		component: PurposeList,
		
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/purposes/create',
		name:'Purpose.Add',
		component: PurposeAdd,
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/purposes/:id/edit',
		name:'Purpose.Edit',
		component: PurposeEdit,
		props: true,
		meta: {
			requiresAuth: true
		}
	},
//Property Type Route
	{
		name: 'PropertyType.Index',
		path: '/admin/property_types',
		component: PropertyTypeList,
		
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/property_types/create',
		name:'PropertyType.Add',
		component: PropertyTypeAdd,
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/property_types/:id/edit',
		name:'PropertyType.Edit',
		component: PropertyTypeEdit,
		props: true,
		meta: {
			requiresAuth: true
		}
	},
//Distance Route
	{
		name: 'Distance.Index',
		path: '/admin/distances',
		component: DistanceList,
		
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/distances/create',
		name:'Distance.Add',
		component: DistanceAdd,
		meta: {
			requiresAuth: true
		}
	},
	{
		path:'/admin/distances/:id/edit',
		name:'Distance.Edit',
		component: DistanceEdit,
		props: true,
		meta: {
			requiresAuth: true
		}
	}

]