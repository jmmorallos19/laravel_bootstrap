function updateDateTime() { 
    // Create a new Date object
    const now = new Date();
    
    // Get the options for date and time formatting
    const optionsDate = { year: 'numeric', month: '2-digit', day: '2-digit' }; // m/d/y format
    const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
    
    // Format the date and time
    const currentDate = now.toLocaleDateString('en-US', optionsDate); // Formats to m/d/y
    const currentDay = now.toLocaleDateString('en-US', { weekday: 'long' });
    const currentTime = now.toLocaleTimeString('en-US', optionsTime); // Ensure 12-hour format with AM/PM

    // Update the content in the <p> element
    document.getElementById('dateTime').innerHTML = `${currentDate} | ${currentDay}, ${currentTime}`;
}

// Call updateDateTime initially
updateDateTime();

// Set an interval to update the time every second
setInterval(updateDateTime, 1000);