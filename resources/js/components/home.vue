<template>
    <div class="container text-secondary">
         <div id="principal" >
        <div class="row">
            <div class="col text-center">
                <h1 id="namerestaurant">                    
                    {{ name }}
                </h1>
            </div>
        </div>

<div class="row text-uppercase justify-content-center rowLg  align-items-center">
            <div class="col-8 col-sm-8 col-md-7 col-lg-6 col-xl-6  text-center">
                <strong>
                <span id="optionsrestaurant">
                    Opciones disponibles
                </span>
            </strong>
            </div>
        </div>

        <div class="row text-uppercase  justify-content-center text-center rowLg">
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-3  p-2">
            
                <button type="button" v-on:click="GetMenu" class="btn btn-lg btn-secondary w-75 h-100">La carta</button>
               
            </div>
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-3 p-2">
            <a href="">
                </a>
                <button type="button" class="btn btn-lg btn-secondary w-75 h-100">Sugerencias</button>
            </div>
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-3 p-2">
            <a href="">
                    <button type="button" class="btn btn-lg btn-secondary w-75 h-100">Su cuenta</button>
                    </a>
            </div>
        </div>

        <div class="row justify-content-center  rowLg  align-items-center">
                <div class="col-8 col-sm-8 col-md-7 col-lg-6 col-xl-6 text-center">
                    <p id="aboutrestaurant">
                        {{ about }}
                    </p>
                </div>
            </div>

</div>
            <div id="carta" class="d-none">
                <carta></carta>
            </div>
    </div>    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:['name','about'],        
    methods: {
        GetMenu: function () {
            debugger;
             $.ajax({
          url:'getmenu',
          type:'get',
          success: function (response) {
                     debugger;
          },
          statusCode: {
             404: function() {
                debugger;
             }
          },
          error:function(x,xs,xt){
              //nos dara el error si es que hay alguno
             debugger;
              //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
          }
       });
            
            /*    
          $( "#principal" ).addClass( "d-none" );
            $( "#carta" ).removeClass( "d-none" );*/

        }
      }
    }
</script>
