<template>
	<!-- <div> -->
	     <div class="m-grid__item m-grid__item--fluid m-wrapper">
		    <div class="m-content">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<!--begin::Portlet-->
		    			<div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
		    				<div class="m-portlet__head">
		    					<div class="m-portlet__head-caption">
		    						<div class="m-portlet__head-title">
		    							<span class="m-portlet__head-icon">
		    								<i class="flaticon-placeholder-2"></i>
		    							</span>
		    							<h3 class="m-portlet__head-text">
		    								Property Type Management
		    							</h3>
		    						</div>
		    					</div>
		    					<div class="m-portlet__head-tools">
		    						<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<router-link :to="{name: 'PropertyType.Add'}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
											<span>
													<i class="la la-plus"></i>
													<span>New Property Type</span>
												</span>
											</router-link>
										</li>
		    						</ul>
		    					</div>
		    				</div>
		    				<div class="m-portlet__body">
		    					<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Actions</th>
										</tr>
										<tr v-for="(p_type, index) in property_types">
											<td>{{index+1}}</td>
											<td>{{p_type.name}}</td>
											<td>
												<router-link :to="{name: 'PropertyType.Edit',params: {id: p_type.id}}" class="btn m-btn--square  btn-primary btn-sm">
											<span>Edit
												</span>
											</router-link>
												<button type="button" class="btn m-btn--square btn-danger btn-sm" v-on:click="deletePropertyType(p_type.id,index)">Delete</button>
											</td>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
		    				</div>
		    			</div>
		    			<!--end::Portlet-->
		    		</div>
		    	</div>
		    </div>
		</div>
	<!-- </div> -->
</template>


<script>
	export default {
		mounted() {
           this.$store.dispatch('getPropertyTypes');
        },
        computed: {
           property_types(){
           		return this.$store.getters.property_types;
           }
        },
        methods: {
        	deletePropertyType(id,index) {
				axios.delete('/api/property_types/'+id).then(response=>{
					console.log(response)
					this.property_types.splice(index,1)
				}).catch(error=>{
					console.log(error)
				})
			},

        }
	}
</script>

<style>
	
</style>