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
            <button @click="toggleRaction(type)" class="btn bg-light" v-for="type in types" :key="type">
                <img :src="image(type)" width="40"/>
            </button>

        </div>

        <button @click="show_reaction_types = !show_reaction_types" class="btn btn-link">
            <span v-if="auth_reaction">
                <img :src="image(auth_reaction)" class="w-25" width="20"/>
                {{auth_reaction}} 
            </span>
            <span v-else>Like</span>
            
        </button>
    </div>

    
</template>

<script>
	
	export default {
        props: ["reacted"],
        data(){
            return{
                show_reaction_types: false,
                types: ["like","love","happy","angry","sad","surprise"],
                auth_reaction: null,
            }
        },

        methods:{
            image(type){
                return '/images/reactions/reaction-'+type+'.png';
            },
            toggleRaction(reaction){
                let path = window.location.href;

                axios.post(path+'/reaction', {reaction});
                 
                this.show_reaction_types = false;

                this.auth_reaction = reaction;

            }
        },
	}

</script>

<style>
.conten-raction{

    display: inline-flex;
}

</style>