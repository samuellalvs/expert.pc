import React from "react";

import Navbar from "../../global/Navbar";
import Carousel from "./components/Carousel";

export default function Home() {
    return (
        <div>
            <Navbar></Navbar>

            <div className="d-flex section container h-100 align-items-center">
                <div className="d-flex flex-column flex-md-row align-items-center">
                    <div className="col-12 col-md-6">
                        <div className="d-flex">
                            <h1 className="text-light">
                                Lorem ipsum dolor, <br />{" "}
                                <b className="text-green">
                                    sit amet consectetur adipiscing elit.
                                </b>
                            </h1>
                        </div>
                    </div>
                    <div className="col-12 col-md-6">
                        <div className="d-flex">
                            <Carousel title="Lançamento das RTX 3000" />
                        </div>
                    </div>
                </div>

                <h1></h1>
            </div>
        </div>
    );
}
