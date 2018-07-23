<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Practice Link to New Page!</div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" @click="linkToSecondPage">Second Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      methods: {
        alertUser: () => {
          alert('Have a good day!');
        },
        linkToSecondPage: () => {

        }
      }
    }
</script>