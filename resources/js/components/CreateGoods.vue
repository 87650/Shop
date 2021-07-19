<template>
    <div class="form"> 
        Создание товара
<form @submit="create">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Название товара</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="name">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >>цена</label>
    <input type="text" class="form-control" id="exampleInputPassword1" v-model="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">категория</label>
    <input type="text" class="form-control" id="exampleInputPassword1" v-model="categories">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">img</label>
    <input type="text" class="form-control" id="exampleInputPassword1" v-model="img">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</template>
<script>


export default {
    data: function(){
        return {
          name: '',
          price: '',
          categories: '',
          img: ''

        }
    },
    methods: 
    {
        create: function()
        {
                axios.post('/goods/create/json', {name: this.name, price: this.price, categories: this.categories, img: this.img}).then((res) => {
                    
                });
        }
        
    }

}
</script>
<style >
.form{
    margin: 100px 0 0 0px;
}
</style>
