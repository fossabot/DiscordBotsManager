import React, {Component} from 'react';
import ReactDom from 'react-dom';

class App extends Component {
    render() {
        return (
            <p>Hello</p>
        )
    }
}

ReactDom.render(<App/>, document.getElementById('root'));