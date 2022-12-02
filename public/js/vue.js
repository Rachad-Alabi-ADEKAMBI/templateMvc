
const { createApp } = Vue

createApp({
  data() {
    return {
        rates: [],
        rate: 0,
        neededAmount: 0,
        amountToPay: 0
    }
},
mounted: function() {
   this.getRates();
},
methods: {
    getRates() {
       axios.get('http://127.0.0.1/rn/api/rates').then(response =>
            this.rates = response.data);
    },
    getBuyingRate($id){
        axios.get('http://127.0.0.1/rn/api/buyingRate/' +$id).then(response =>
        this.rate = response.data);
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