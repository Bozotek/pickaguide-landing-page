import React from 'react';
import {Menu} from './Menu.jsx';

const WelcomeElement = (props) => (
	<div className={props.type} style={props.style}>
		<p>{props.content}</p>
	</div>
);

const WelcomeButtonRow = () => (
	//Here use Link and not href
	<div className="welcomeButtonRow">
		<a href="#">
			<WelcomeElement type="button" content="Visiter" />
		</a>
		<a href="#">
			<WelcomeElement type="button" style={{marginRight: 0}} content="Devenir guide" />
		</a>
	</div>
);

const WelcomeBox = () => (
	<div className="welcomeBox">
		<WelcomeElement type="row" content="Bienvenue" />
		<WelcomeElement type="row" content="sur PickaGuide" />
		<WelcomeElement type="row" content="pour rencontrer des locaux" />
		<WelcomeButtonRow />
	</div>
);

export class HomePage extends React.Component {
	//If the user is connected, maybe change the homepage
	render() {
		return (
			<div>
				<Menu />
				<WelcomeBox />
			</div>
		);
	}
};
