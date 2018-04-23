import Post from "./Post";
import WebImage from "./WebImage";

export default class Posts {
    constructor() {
        this.values=[];
        this._endpoint = '/api/posts?page=';
    }
    paginate(page = 1) {

        return axios.get(this._endpoint + page)
            .then(({data}) => {
                this.values=data.data.map((value) => {
                    let post = new Post();
                    post.id = value.id;
                    post.title = value.title;
                    post.image = new WebImage(value.image);
                    post.body = value.body;
                    post.posts = this;
                    return post;
                })
                return this.values;
                //this.pageCount = data.meta.last_page;
            });

    }
    add(post){
        this.values.unshift(post);
    }



}