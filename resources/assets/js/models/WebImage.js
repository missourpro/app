export default class WebImage {
    get src() {
       return this.url;

    }

    get url() {
        return this._url;
    }


    constructor(url) {
        this._url = url;
    }

    isLocal() {
        return false;
    }
}