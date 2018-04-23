export default class LocalImage {
    get file() {
        return this._file;
    }
    get src() {
        return this.url;
    }
    get url() {
        return URL.createObjectURL(this._file).valueOf();

    }
    constructor(file) {
        this._file = file;
    }


    isLocal(){
        return true;
    }
}