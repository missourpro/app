import Notification from "./Notification";

export default class extends Notification {

    constructor(component){
        super();
        this._component=component;
        this._colors=new Map([
            ['success', 'rgba(0, 255, 0, 0.9)'],
            ['error', 'rgba(255, 0, 0, 0.9)'],

        ]);

    }
    notify(type, message){
        this._component.$popup({
            message: message,
            backgroundColor: this._colors.get(type),
            delay: 4
        })
    }

}