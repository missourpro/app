export default class {
    notify(type, message){
        throw new Error('must be overridden');
    }
    success(message){
        this.notify('success', message)
    }
    error(message){
        this.notify('error', message)

    }

}