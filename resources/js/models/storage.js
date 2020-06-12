const set = (key, value) => {
  if (typeof(Storage) !== "undefined") {
    localStorage.setItem(key, value);
    return true;
  } else {
    return false;
  }
}

const get = key => {
  if (typeof(Storage) !== "undefined") {
    return localStorage.getItem(key);
  } else {
    return false;
  }
}

const LocalStorage = {set, get };

export default LocalStorage;