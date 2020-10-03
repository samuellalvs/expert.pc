import React from "react";

class HardwareSelection extends React.Component {
    render() {
        return (
            <div>
                <div className="container">
                    <div className="section">
                        <div className="d-flex h-100 justify-content-center align-items center">
                            <div className="card border-0 shadow">
                                <div className="card-body">
                                    <div className="d-flex flex-column flex-md-row">
                                        <select name="hardware" id="">
                                            <option value="">
                                                Placa de vídeo
                                            </option>
                                            <option value="">
                                                Memória RAM
                                            </option>
                                            <option value="">Placa-mãe</option>
                                            <option value="">
                                                Processador
                                            </option>
                                            <option value="">Fonte</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default HardwareSelection;
