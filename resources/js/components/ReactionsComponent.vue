<template>
<div class="margin-top d-flex conten-raction" >
    <div class="px-1" 
    v-for="(count, reaction) in reactions_summary" 
    :key="reaction"
    v-show="count">
        <img 
        style="width: 30px" :src="image(reaction)" />
        <span class="px-1">{{ count }}</span>
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
        props: ["summary", "reacted"],
        data(){
            return{
                show_reaction_types: false,
                types: ["like","love","happy","angry","sad","surprise"],
                reactions_summary: { ...this.summary},
                auth_reaction: this.reacted ? this.reacted.type : null,
            }
        },

        methods:{
            image(type){
                return '/images/reactions/reaction-'+type+'.png';
            },
            toggleRaction(reaction){
                let path = window.location.href;
                let old_reaction = this.auth_reaction;

                axios.post(path+'/reaction', {reaction});
                 
                this.show_reaction_types = false;

                this.resetReactionsSummary(reaction, this.auth_reaction);
                console.log(this.auth_reaction);

                if(this.auth_reaction === reaction){
                    this.auth_reaction = null;
                }else{
                    this.auth_reaction = reaction;
                }
            },
            


            resetReactionsSummary(new_reaction, old_reaction) {
            if(old_reaction){
                this.reactions_summary[old_reaction]--;
            }

                if(new_reaction && new_reaction !== old_reaction){
                 if(!this.reactions_summary[new_reaction]){
                    this.reactions_summary[new_reaction] = 1;
                    return;
                }
                this.reactions_summary[new_reaction]++;
                }
            },
            
        }
        
	}

</script>

<style>
.conten-raction{

    display: inline-flex;
}

</style>