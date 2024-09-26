<style>
        .url-button {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 10px 20px; /* Some padding */
            border: none; /* Remove borders */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer/hand icon */
            font-size: 16px;
        }

        .url-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        .container-membership {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 220px;
            margin-top: 20px;
        }
        .container-membership h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000080;
        }
        .container-membership h2 {
            color: #0066cc;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .content {
            flex: 1;
            padding-right: 40px;
        }
        .image {
            flex: 0 0 300px;
            padding-top: 22px;
        }

        p {
            color: #555;
            font-size: 1em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: transparent;
            color: #0066cc;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1em;
        }
        .btn:hover {
            text-decoration: underline;
        }
        .container-started {
            margin-top: 220px;
            width: auto;
        }
        .container-started h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000080;
        }
        .container-started h2 {
            color: #0066cc;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .step {
            flex-basis: 30%;
            margin-bottom: 20px;
        }
        .step-icon {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .step h3 {
            margin: 10px 0;
        }
        .step p {
            color: #666;
            font-size: 0.9em;
        }
        .btn {
            display: inline-block;
            background-color: #0066cc;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.9em;
            position: absolute;
        }
        .recent-additions {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .section {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .items h3 {
            font: bold 20px/1.5 Arial, Helvetica, sans-serif;
        }
        .item {
            transition: transform 0.3s ease;
        }
        .item:hover {
            transform: scale(1.05);
        }
        .book img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
        .book .details {
            padding: 10px 0;
        }
        .view-all {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: rgb(3, 195, 195);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .view-all:hover {
            background-color: rgb(37, 84, 112);
        }
        .container-support {
            max-width: 1200px;
            /* margin: 0 auto; */
            margin-top: 222px;
            text-align: center;
        }
        .container-support h2 {
            color: #0066cc;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .container-support h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000080;
        }
        .container-support p {
            color: #555;
            font-size: 1em;
            margin-bottom: 30px;
        }
        .support-options {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .option {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex-basis: calc(33% - 20px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .option:hover {
            /* background-color: #e0e0e0; */
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .option-icon {
            font-size: 2em;
            margin-bottom: 10px;
            color: #0066cc;
        }
        .container-library {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h1 {
            font-size: 3em;
            color: #333;
            margin-bottom: 10px;
        }

        .section-title p {
            font-size: 1.2em;
            color: #666;
        }

        /* Service Cards */
        .research-services {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .research-card {
            background: #f9f9f9;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .research-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .research-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .research-card h3 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 15px;
        }

        .research-card p {
            font-size: 1em;
            color: #666;
            margin-bottom: 20px;
        }

        /* Button Styles */
        .research-btn {
            display: inline-block;
            background-color: #5a67d8;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .research-btn:hover {
            background-color: #434190;
        }
                    
        .container-session {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            margin-top: 92px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container-session h1 {
            text-align: center;
            font-size: 2.5em;
            color: #0056b3;
        }

        .container-session h3 {
            text-align: center;
            font-size: 1.2em;
            color: #555;
            margin-bottom: 20px;
        }

        .container-session p {
            font-size: 1.2em;
            color: #555;
        }

        .sessions {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .session-card {
            background-color: #f0f8ff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            width: 45%;
            text-align: left;
        }

        .session-card h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #0056b3;
        }

        .session-card p {
            font-size: 1.1em;
            margin-bottom: 8px;
        }

        .session-btn {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .session-btn:hover {
            background-color: #004494;
        }
        .team-section {
            text-align: center;
            padding: 50px;
        }

        .team-section h1 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .team-member {
            background-color: #f4f4f4;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Spacing for mobile */
        }

        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .team-member h2 {
            margin-top: 10px;
            font-size: 20px;
        }

        .role {
            color: #e91e63;
            font-weight: bold;
        }

        .description {
            font-size: 14px;
            color: #555;
            margin: 10px 0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .social-icons a {
            margin: 0 5px;
        }

        .social-icon {
            width: 24px;
            height: 24px;
            transition: transform 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        .footer {
            margin-top: 50px;
        }

        .footer p {
            margin-bottom: 10px;
        }

        .learn-more-btn {
            padding: 10px 20px;
            background-color: #5a67d8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .learn-more-button:hover {
            background-color: #434190;
        }
        
.feedback-section {
  display: flex;
  justify-content: space-between;
  padding: 50px;
}

.feedback-left {
  flex: 1;
  text-align: center;
  padding: 20px;
}

.feedback-title {
  font-size: 24px;
  color: #004d40;
}

.feedback-image {
  max-width: 80%;
}

.feedback-right {
  flex: 1;
  padding: 20px;
}

.feedback-form {
  display: flex;
  flex-direction: column;
}

.form-label {
  margin-top: 20px;
  font-size: 18px;
  color: #004d40;
}

.slider {
  width: 100%;
  margin: 10px 0;
}

.range-labels {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  color: #004d40;
}

.feedback-input {
  width: 100%;
  height: 100px;
  margin-top: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.dropdowns {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.dropdown {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 45%;
}

.submit-button {
  background-color: #004d40;
  color: white;
  padding: 10px;
  margin-top: 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #00695c;
}

.faq-container {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    
        .search-section {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    
        .search-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
    
        .search-bar {
            display: flex;
        }
    
        .search-bar input {
            flex-grow: 1;
            padding: 10px;
            border: none;
            border-radius: 4px 0 0 4px;
        }
    
        .search-button {
            background-color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }
    
        .section-title {
            font-size: 20px;
            color: #e74c3c;
            margin-bottom: 15px;
        }
    
        .guide-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
    
        .guide-links a {
            background-color: #f1f1f1;
            padding: 8px 15px;
            border-radius: 20px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }
    
        .faq-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    
        .faq-item {
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            overflow: hidden;
        }
    
        .faq-question {
            width: 100%;
            text-align: left;
            padding: 15px;
            background-color: #f9f9f9;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .faq-question::after {
            content: '+';
            font-size: 20px;
        }
    
        .faq-question.active::after {
            content: '-';
        }
    
        .faq-answer {
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease;
        }
    
        .faq-answer.active {
            padding: 15px;
            max-height: 1000px;
        }

        @media (max-width: 768px) {
            .guide-links {
                flex-direction: column;
            }
    
            .search-title {
                font-size: 20px;
            }
    
            .section-title {
                font-size: 18px;
            }
    
            .faq-question {
                font-size: 14px;
            }
            .social-icons {
                justify-content: space-around;
            }
            .research-services {
                flex-direction: column;
                align-items: center;
            }
            .support-options {
                flex-direction: column;
            }
            .option {
                flex-basis: 100%;
                margin-bottom: 20px;
            }
            .container-support h1 {
                font-size: 2em;
            }
            .steps {
                flex-direction: column;
            }
            .step {
                flex-basis: 100%;
            }
            .step-icon {
                padding-top: 52px;
            }
            .container-started h1 {
                font-size: 1.5em;
            }
            .container-membership {
                flex-direction: column;
            }
            .content {
                padding-right: 0;
                margin-bottom: 20px;
            }
            .image {
                flex: 0 0 200px;
                padding-top: 60px
            }
            .container-membership h1 {
                font-size: 2em;
            }
            .team-container {
                flex-direction: column;
                align-items: center;
            }

            .team-member {
                width: 90%; 
            }
            .feedback-section {
                flex-direction: column;
                padding: 20px;
            }

            .feedback-left, .feedback-right {
                width: 100%;
            }

            .feedback-image {
                max-width: 100%;
            }
        }
        
@media (max-width: 480px) {
  .team-section h1 {
    font-size: 22px;
  }

  .team-member {
    width: 100%;
  }

  .team-member h2 {
    font-size: 18px;
  }

  .learn-more-button {
    padding: 8px 16px;
    font-size: 14px;
  }
}
        
</style>