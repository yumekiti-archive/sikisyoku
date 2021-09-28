import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        data: [],
    },
    mutations: {
        set: (state, {response, url}) => {
            state.data = [url];
            state.data[url] = response.data;
        },
    },
    actions: {
        async get({ commit }, {url: url}){
            await axios
                .get('/api/' + url)
                .then( response =>{
                    let url = response.config.url.replace('/api/', '');
                    commit('set', {response: response, url: url});
                })
                .catch(error => {
                    console.log(error);
                });
        },
        async post({ commit }, {url: url, formData: formData}){
            await axios
                .get('/api/' + url, formData)
                .then( response =>{
                    commit('set', response);
                })
                .catch(error => {
                    console.log(error);
                });
        },
    },
    modules: {
    }
})
