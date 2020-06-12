<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <h2 class="card-body">
                        Home
                    </h2>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import LocalStorage from './../../models/storage';

    export default {
      name: 'Home',
      beforeMount(){
        LocalStorage.set('app_mode', 'paradiseinself')
      }
    }
</script>