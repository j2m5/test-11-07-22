import axios from 'axios'

export function index(url, query = {}) {
    return axios.get('/api/' + url, query)
}

export function show(url, id, query = {}) {
    return axios.get('/api/' + url + '/' + id, query)
}
