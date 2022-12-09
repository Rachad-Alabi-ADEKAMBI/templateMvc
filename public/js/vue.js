
const { createApp } = Vue

createApp({
  data() {
    return {
        rates: [],
        details: [],
        infos: [],
        id: 1,
        rate: 1,
        rat: 0,
        amount: 0,
        need: 0,
        pay: '',
        amountToPay: 0,
        showEditRate: false,
        showInfos: false,
        showPayment: false,
        showBuy: true,
        showSell: true,
        load: 0,
        withdraw: 0,
        showLoad: false,
        showWithdraw: false,
        showWallet: true
    }
},
mounted: function() {
   this.getRates();
},
methods: {
    getRates() {
       axios.get('http://127.0.0.1/rn/api/rates').then(response =>
            this.rates = response.data);
            this.showInfos = true;
    },
    getBuyingRate(id){
        axios.get('http://127.0.0.1/rn/api/buyingRate/' +id).then(response =>
        this.rate = response.data);
    },
    getSellingRate(id){
        axios.get('http://127.0.0.1/rn/api/sellingRate/' +id).then(response =>
        this.rate = response.data);
    },
    editRate(id){
        axios.get('https://127.0.0.1/rn/api/rateById/1').then(response =>
        this.infos = response.data);
        window.location.replace('http://127.0.0.1/rn/index.php?action=editRate&id=' +id)
    },
    getPay(need, rate){
        this.pay = rate * need;
        },
        getNeed(amount, rate, id) {
            axios.get('https://127.0.0.1/rn/api/buyingRate/' +id).then(response =>
        this.rate = response.data);
          //  this.need = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(amount * rate);
          this.need = amount * rate;
        },
    getAmount(need, rate, id) {
        axios.get('https://127.0.0.1/rn/api/buyingRate/' +id).then(response =>
        this.rate = response.data);
           // this.amount = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(need * rate);
           this.amount = need/rate;
        },
        displayBuy(){
            this.showBuy = true;
            this.showPayment = false;
        },
        displaySell(){
            this.showSell = true;
            this.showPayment = false;
        },
        displayPayment(){
            this.showBuy = false;
            this.showSell = false
            this.showPayment = true;
        },
        displayWallet(){
            this.showWallet = true,
            this.showLoad = false,
            this.showWithdraw = false
        },
        displayLoad(){
            this.showWallet = false,
            this.showLoad = true,
            this.showWithdraw = false
        },
        displayWithdraw(){
            this.showWallet = false,
            this.showLoad = false,
            this.showWithdraw = true
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