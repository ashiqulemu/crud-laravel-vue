<template>
	<div>
		<div class="col-md-6 mx-auto">
			<h1>{{message}}</h1>
			<form @submit.prevent="updateInfo">
				<div class="form-group">
					<label>First name</label>
					<input type="text" class="form-control" v-model="first_name" name="first_name">
				</div>
				<div class="form-group">
					<label>Last name</label>
					<input type="text" class="form-control" v-model="last_name" name="last_name" >
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="number" class="form-control" v-model="phoneNumber" name="phone">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea   class="form-control" v-model="address" name="address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</template>

<script>
    export default {
        data(){
            return{
                first_name:'',
                last_name:'',
                phoneNumber:'',
                address:'',
                message:'',
            }
        },
	    created(){
            axios.get('/information/'+this.$route.params.id+'/edit').then(response=>{
             this.first_name=response.data.information.first_name
             this.last_name=response.data.information.last_name
             this.phoneNumber=response.data.information.phone
             this.address=response.data.information.address
            })
	    },
     
	    methods:{
            updateInfo(){
                axios.patch('/information/'+this.$route.params.id,{
                    first_name:this.first_name,
                    last_name:this.last_name,
                    phone:this.phoneNumber,
                    address:this.address
                }).then(res=>{
                    this.message=res.data.message
                }).catch(error=>{

                })
            }
	    }
     
    }
</script>

<style scoped>

</style>
