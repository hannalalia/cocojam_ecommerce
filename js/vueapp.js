var products = {
      cocojam_small:{
        id:1,
        name: "Tropical\'s Best Homemade Cocojam (Small)",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit1.",
        price: 100,
        image: 'images/cocojam.jpg'

      },
      cocojam_large:{
        id:2,
      	name: "Tropical\'s Best Homemade Cocojam (Large)",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit2.",
        price: 150,
        image: 'images/cocojam2.jpg'
      }

    }

    var vm = new Vue({
          el: '#app',
        data: {
          cart: [],
          product: products
      	},
        filters: {
          currency: function(value){
            return '₱' + Number.parseFloat(value).toFixed(2);}
        },
        computed:{
          cartTotal: function(){
            let sum = 0;
            for(key in this.cart){
              sum = sum + (this.cart[key].product.price * this.cart[key].qty);
            }
            return sum;
          },
        cartQty: function(){
            let qty = 0;
            for(key in this.cart){
              qty = qty + (this.cart[key].qty);
            }
            return qty;
          }
        },
        methods: {
          addItem: function(product){
            var whichProduct;
            var existing = this.cart.filter(function(item,index){
              if(item.product.id == product.id){
                whichProduct = index;
                return true;
              }
              else
              {
                return false;
              }
            });

            if(existing.length){
              this.cart[whichProduct].qty++;
            }
            else{
              this.cart.push({product: product, qty:1})
            }
            }
          },
          deleteItem: function(id){
              if(this.cart[id]>1){
                  this.cart[id].qty--;
              }
              else{
                this.cart.splice(id,1);
              }
          }
        });