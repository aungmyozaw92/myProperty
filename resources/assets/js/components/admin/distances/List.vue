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
		    								Distance Management
		    							</h3>
		    						</div>
		    					</div>
		    					<div class="m-portlet__head-tools">
		    						<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<router-link :to="{name: 'Distance.Add'}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
											<span>
													<i class="la la-plus"></i>
													<span>New Distance</span>
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
										<tr v-for="(distance, index) in distances">
											<td>{{index+1}}</td>
											<td>{{distance.name}}</td>
											<td>
												<router-link :to="{name: 'Distance.Edit',params: {id: distance.id}}" class="btn m-btn--square  btn-primary btn-sm">
											<span>Edit
												</span>
											</router-link>
												<button type="button" class="btn m-btn--square btn-danger btn-sm" v-on:click="deleteDistance(distance.id,index)">Delete</button>
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
           this.$store.dispatch('getDistances');
        },
        computed: {
           distances(){
           		return this.$store.getters.distances;
           }
        },
        methods: {
        	deleteDistance(id,index) {
				axios.delete('/api/distances/'+id).then(response=>{
					console.log(response)
					this.distances.splice(index,1)
				}).catch(error=>{
					console.log(error)
				})
			},

        }
	}
</script>

<style>
	
</style>