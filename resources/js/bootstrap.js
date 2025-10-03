import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//Enable cookies and csrf tokens
axios.defaults.withCredentials=true;
axios.defaults.withXSRFToken= true;
