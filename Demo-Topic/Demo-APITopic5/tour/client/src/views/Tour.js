import React, { Component } from "react";
import "../sassc/tour.scss";
export default class Tour extends Component {
  constructor(props) {
    super(props);
    this.state = {
      count: 0,
      showInfo: false,
    };
  }

  handleInfo = () => {
    this.setState({
      showInfo: !this.state.showInfo,
    });
  };
  addCount = () => {
    this.setState({ count: this.state.count + 1 });
  };
  lowerCount = () => {
    this.setState({ count: this.state.count - 1 });
  };
  resetCount = () => {
    this.setState({ count: 0 });
  };
  render() {
    const { id, ten, img, gia, info } = this.props.tour;
    const { removeTour, showTour } = this.props;

    return (
      <article className="tour">
        <div className="img-container">
          <img src={`http://localhost:5000${img}`} alt="city tour" />
          <span className="close-btn" onClick={() => removeTour(id)}>
            <i className="fas fa-window-close" />
          </span>
        </div>
        <div className="tour-info">
          <h3>{ten}</h3>
          <h4>{gia}</h4>

          <h5>
            info{" "}
            <span onClick={this.handleInfo}>
              <i className="fas fa-caret-square-down" />
            </span>
          </h5>

          {this.state.showInfo && <p>{info}</p>}
          <button
            type="button"
            className="btn btn-primary"
            onClick={() => showTour(id)}
          >
            Update
          </button>
        </div>
      </article>
    );
  }
}
