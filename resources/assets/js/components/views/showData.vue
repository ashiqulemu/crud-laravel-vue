<template>
	<div>
		<br>
		<h2 class="text-danger">{{message}}</h2>
		<table class="table table-striped table-bordered table-hover table-condensed bg-dark text-white">
			<tr>
				<td>First Name</td>
				<td>Last Name </td>
				<td>Phone</td>
				<td>Address</td>
				<td>Action</td>
			</tr>
			<tr v-for="information in titles">
				<td>{{information.first_name}}</td>
				<td>{{information.last_name}}</td>
				<td>{{information.phone}}</td>
				<td>{{information.address}}</td>
				<td><router-link :to="{name:'edit',params:{id:information.id}}" class="btn btn-dark">edit</router-link> | <a href="" @click.prevent="deleteMe(information.id, information.first_name)">Delete</a></td>
			</tr>
		</table>
	</div>
</template>

<script>
    export default {
        name: "showData",
	    data(){
            return{
                titles:[],
	            message:''
            }
	    },
	    created(){
            this.getList()
	    },
	    methods:{
            deleteMe(id,name){
              axios.delete('/information/'+id).then(res=>{
                  this.message='Your '+name+ ' deleted successfully'
	              this.getList()
              })
            },
		    getList(){
                axios.get('/information').then(response=>{
                    this.titles=response.data.informations
                })
		    }
	    }
    }
</script>

<style scoped>

</style>
