import Vue from 'vue'
import VueRouter from 'vue-router'
import Test from '@/views/Test.vue'
import Index from '@/views/Index.vue'
import Get from '@/views/Get.vue'
import Qr from '@/views/Qr.vue'
import QrGenerate from '@/views/QrGenerate.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Index',
    component: Index
  },
  {
    path: '/stamp/:hash',
    name: 'Get',
    component: Get
  },
  {
    path: '/qr',
    name: 'Qr',
    component: Qr
  },
  {
    path: '/qr/:hash',
    name: 'QrGenerate',
    component: QrGenerate
  },
  {
    // 本番環境は消す
    path: '/test',
    name: 'Test',
    component: Test
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
