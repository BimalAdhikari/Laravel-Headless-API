import { BrowserRouter as Router, Link, Routes, Route } from 'react-router-dom';
import { useEffect, useState } from 'react';

function IndexPage(): JSX.Element {
    const [stages, setStages] = useState<Stage[]>([]);
    const [loading, setLoading] = useState<boolean>(true);
    const [error, setError] = useState<string | null>(null);

    useEffect(() => {
        fetch('http://headless/api/etappes')
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                setStages(data.data || []);
                setLoading(false);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                setError(error.message);
                setLoading(false);
            });
    }, []);

    if (loading) return <div>Loading stages...</div>;
    if (error) return <div>Error: {error}</div>;

    return (
        <div>
            <h1>Tour de France 2025 - Stages</h1>
            <ul>
                {stages.map(stage => (
                    <li key={stage.id}>
                        <strong>Stage {stage.stage_number}</strong> - {stage.stage_date}
                        <br />
                        <Link to={`detail/${stage.id}`}>
                            <span>{stage.start_city} → {stage.finish_city}</span>
                        </Link>
                        <br />
                        <small>
                            {stage.distance_km} km • {stage.stage_type} • Elevation: {stage.elevation_d_plus} m
                        </small>
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default IndexPage;


