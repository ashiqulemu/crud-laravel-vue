<template>
    <div>
      <div class="col-md-6 mx-auto">
          <h1>{{message}}</h1>
          <form @submit.prevent="postInfo">
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
        methods:{
            postInfo(){
                   axios.post('/information',{
                       first_name:this.first_name,
                       last_name:this.last_name,
                       phone:this.phoneNumber,
                       address:this.address
                   }).then(response=>{
                       this.first_name='',
                           this.last_name='',
                           this.phoneNumber='',
                           this.address='',
                        this.message=response.data.message
                       
                   }).catch(error=>{
                   
                   })
            }
        }
    }
</script>

<style scoped>

</style>
