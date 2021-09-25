import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    data: [],
  },
  mutations: {
    set: (state, response) => {
      state.data = response.data;
    },
  },
  actions: {
  },
  modules: {
    async get({ commit }){
      await axios
      .get('/api/signin')
      .then( response =>{
          commit('set', response);
      })
      .catch(error => {
          console.log(error);
      });
    },
  }
})
