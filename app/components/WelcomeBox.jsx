import '../../assets/styles/main.css';
import React from 'react';

class WelcomeText extends React.Component {
  render() {
    return(
      <div className="welcometext">{this.props.content}</div>
    );
  }
};

class WelcomeRow extends React.Component {
  render() {
    return(
      <div className="welcomerow">
        <WelcomeText content={this.props.textContent}/>
      </div>
    );
  }
};

class WelcomeButtonRow extends React.Component {
  render() {
    //Here use Link and not href
    return(
      <div className="welcomebuttonrow">
          <a href="#"><div className="welcomebutton buttontext">Visiter</div></a>
          <a href="#"><div className="welcomebutton buttontext" style={{marginRight: 0}}>Devenir guide</div></a>
      </div>
    );
  }
};

export class WelcomeBox extends React.Component {
  render() {
    return (
      <div className="welcomebox">
        <WelcomeRow textContent="Bienvenue" />
        <WelcomeRow textContent="sur PickaGuide" />
        <WelcomeRow textContent="pour rencontrer des locaux" />
        <WelcomeButtonRow textContent="pour rencontrer des locaux" />
      </div>
    );
  }
};
