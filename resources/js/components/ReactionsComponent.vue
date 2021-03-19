<template>
<div class="margin-top d-flex conten-raction" >
    <div>
        <img class="px-1"
        style="width: 30px"
        src="/images/reactions/reaction-like.png"/>
        <span class="px-1">2</span>
    </div>
    <div>
        <img class="px-1"
        style="width: 30px"
        src="/images/reactions/reaction-happy.png"/>
        <span class="px-1">2</span>
    </div>
    <div>
        <img class="px-1"
        style="width: 30px"
        src="/images/reactions/reaction-surprise.png"/>
        <span class="px-1">2</span>
    </div>


</div>
	<div class="border-top position-relative">
        <div class="absolute borde rounded shadow-sm bg-white"
        v-show="show_reaction_types">
            <button class="btn bg-light">
                <img src="/images/reactions/reaction-like.png" width="40"/>
            </button>
            <button class="btn bg-light">
                <img src="/images/reactions/reaction-love.png" width="40"/>
            </button>
            <button class="btn bg-light">
                <img src="/images/reactions/reaction-happy.png" width="40"/>
            </button>
            <button class="btn bg-light">
                <img src="/images/reactions/reaction-angry.png" width="40"/>
            </button>
            <button class="btn bg-light">
                <img src="/images/reactions/reaction-sad.png" width="40"/>
            </button>
            <button class="btn bg-light">
                <img src="/images/reactions/reaction-surprise.png" width="40"/>
            </button>
        </div>

        <button @click="show_reaction_types = !show_reaction_types" class="btn btn-link">Like</button>
    </div>

    
</template>

<script>
	
	export default {
        data(){
            return{
                show_reaction_types: false
            }
        }
  

	}

</script>

<style>
.conten-raction{

    display: inline-flex;
}

</style>