import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    vehicles: []
  },
  getters: {
    allVehicles: state =>state.vehicles
  },
  mutations: {//3 thiết lập trạng thái (state) mới
    GET_VEHICLES: (state, vehicles) => {
      state.vehicles = vehicles
    }
  },
  actions: {
    //2. phương thức getVehicles được gọi sẽ kết nối dữ liệu tới server qua axios
    //sau khi nhận được dữ liệu từ server sẽ gọi phương thức commit để chuyển dữ liệu
    //tới state.vehicles
    getVehicles({ commit }) {
      axios.get('http://localhost:1000/vehicles').then(response => {
        commit('GET_VEHICLES', response.data)
      })
    }
  }
})
