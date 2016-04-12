import '../styles/main.css';
import React from 'react';
import ReactDOM from 'react-dom';

let WelcomeText = React.createClass({
    render() {
        return(
            <div className="welcometext">{this.props.content}</div>
        );
    }
});

let WelcomeRow = React.createClass({
    render() {
        return(
            <div className="welcomerow">
                <WelcomeText content={this.props.textContent}/>
            </div>
        );
    }
});

let WelcomeBox = React.createClass({
    render() {
        var mainBackground = {
            backgroundImage: 'url("./images/optimized_homepage.jpg")',
        	backgroundRepeat: 'no-repeat',
        	backgroundAttachment: 'fixed',
        	backgroundPosition: 'center center',
        	backgroundSize: '100%',
        	backgroundColor: '#222'
        };

        return(
            <div style={mainBackground}>
                <div className="welcomebox">
                    <WelcomeRow textContent="Bienvenue" />
                    <WelcomeRow textContent="sur PickaGuide" />
                    <WelcomeRow textContent="pour rencontrer des locaux" />
                </div>
            </div>
        );
    }
});

// <div class="welcomebuttonrow">
//     <a href="/visit/index.php"><div class="welcomebutton buttontext">Visiter</div></a>
//     <a href="/forms/guide.php"><div class="welcomebutton buttontext" onclick='becomeGuide(<?php echo isset($_SESSION["userId"]);?>);' style="margin-right: 0;float: right;">Devenir guide</div></a>
// </div>

ReactDOM.render(
    <WelcomeBox />,
    document.getElementById('root')
);
