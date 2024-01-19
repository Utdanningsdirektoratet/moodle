import {subscribe} from 'core/pubsub';
import MessageDrawerEvents from 'core_message/message_drawer_events';

export const init = () => {
    subscribe(MessageDrawerEvents.SHOW_CONVERSATION, () => {
        window.console.log('Received somethings');
    });
};
