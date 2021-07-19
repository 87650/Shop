<template>
    <div class="containe">
        <div class="blok" v-for="item in data" :key="item.id">
            <img class="img" v-bind:src="item.img">
            <h1>{{item.categories}}</h1>
        </div>
        <div class="add">
            <p>
  
  <button class="btn btn-primary but" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    +
  </button>
</p>
<div class="collapse te" id="collapseExample">
  <div class="card card-body">
   <form @submit="update">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Категория</label>
    <input type="text" v-model="catego" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <input type="text" v-model="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <input type="submit">
  </div>
  
</form>
  </div>
</div>
    </div>
    </div>
</template>

<script>
    export default {
        data: function(){
        return {
            data: [],
            catego: '',
            img: '',
            }
        },
        mounted() {
            console.log('Component mounted.')
            setInterval(this.get(),1000);
        },
        methods: {
            get: function (){
                axios.get('/main/json').then((res) => {
                    this.data = res.data.categories;
                    console.log(this.data);
                });
            },
            update: function (){
                axios.post('/main/set', {categories: this.catego, img: this.img}).then((res) => {
                    
                });
            }
        }
    }
</script>
<style>
.containe{
    margin: 100px 0 0 500px;
    width: 500px;
    display: flex;
}
.img{
    width: 200px;
    height: 200px;
}
.add{
    background: #a3a3a3;
    width: 200px;
    height: 200px;
    padding: 45px 0 0 70px;
    font-size: 70px;
}
.te{
    width: 200px;
    height: 200px;
    font-size: 20px;
}
.but{
    margin: 0 0 0 5px;
    background: #a3a3a3;
}
.blok{
    padding: 0 0 0 20px;
}
</style>
