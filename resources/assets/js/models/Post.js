export default class Post {
    get posts() {
        return this._posts;
    }

    set posts(value) {
        this._posts = value;
    }
    get id() {
        return this._id;
    }

    set id(value) {
        this._id = value;
    }

    get title() {
        return this._title;
    }

    set title(value) {
        this._title = value;
    }

    get image() {
        return this._image;
    }

    set image(value) {
        this._image = value;
    }

    get body() {
        return this._body;
    }

    set body(value) {
        this._body = value;
    }

    constructor() {
        this._id = null;
        this._title = '';
        this._image = '';
        this._body = '';
        this._posts = null;
    }

    save() {

        if (this._id) {

            return this.update();
        }
        else {
            return this.store();
        }
    }

    store() {
        const formData = this._formData();
        return axios.post('/api/posts', formData, {headers: {'Content-Type': 'multipart/form-data'}});


    }


    update() {
        const formData = this._formData();
        formData.append('_method', 'put');

        return axios.post('/api/posts/' + this._id,  formData, {headers: {'Content-Type': 'multipart/form-data'}});


    }
    delete(){
        const formData = this._formData();
        formData.append('_method', 'delete');
        return axios.post('/api/posts/' + this._id,  formData, {headers: {'Content-Type': 'multipart/form-data'}});
    }

    _formData() {
        const formData = new FormData();
        formData.append('title', this._title);
        formData.append('image', this.image.isLocal() ? this.image.file : this.image.url);
        formData.append('body', this._body);
        return formData;
    }
}