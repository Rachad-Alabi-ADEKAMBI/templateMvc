
const { createApp } = Vue

createApp({
  data() {
    return {
        cars: []

    }
},
mounted: function() {
  // this.getCars();
},
methods: {
    getCars() {
       axios.get('http://127.0.0.1/frankobizness/api/cars').then(response =>
            this.cars = response.data);

        this.showBtn = true;
        this.showCars = true;
    },
    getCar($id){
        window.location.replace('././index.php?action=car&id='+$id)
    },

    format(num){
    let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
    return res;
},
    getImgUrl(pic) {
    return "public/img/" + pic;
},
}
  }).mount('#app')