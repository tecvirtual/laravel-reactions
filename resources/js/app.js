require('./bootstrap');
//require('alpinejs');
import { createApp } from 'vue';
import ExampleComponent from  './components/ExampleComponent'
import ReactionsComponent from  './components/ReactionsComponent'


createApp({
	components: {
		ExampleComponent,
		ReactionsComponent,
	}
}).mount('#app');
