  const axios = require('axios');

  const getLoggedInStatus = _ => axios.get('/api/auth/is-logged-in').then( resp =>  resp.data['is-logged-in']).catch(error => error);

  const isNewUser  = email => axios.get('/api/auth/is-new-user/'+email).then( resp =>  resp.data['is-new-user']).catch(error => error);

  const UserManager = {getLoggedInStatus, isNewUser}

  export default UserManager